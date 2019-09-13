export default {
    action({state, commit, getters, dispatch})
    {
        return 'Action'
    },

    toggleDialog({state, commit})
    {
        commit('openDialog', !state.showDialog)
    },

    toggleCart({state, commit})
    {
        commit('openCart', !state.showCart)
    }
}
