export default {
    install(app) {
        app.config.globalProperties.$hasRole = (role) => {
            const { user } = app.config.globalProperties.$page.props.auth || {};
            return user && user.roles && user.roles.some((userRole) => userRole.name === role);
        };
        app.config.globalProperties.$hasPermission = (permission) => {
            const { user } = app.config.globalProperties.$page.props.auth || {};
            if (!user || !user.roles) return false;
            return (
                user.roles.filter(
                    (role) =>
                        role.permissions &&
                        role.permissions.includes(permission)
                ).length > 0
            );
        };
    },
};
