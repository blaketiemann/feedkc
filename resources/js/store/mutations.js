export default {
    mutation(state, payload)
    {
        return "Mutation"
    },

    openDialog(state, payload)
    {
        if(typeof payload === "boolean")
            state.showDialog = payload
        else
            error('Not a Boolean')
    },

    openCart(state, payload)
    {
        if(typeof payload === "boolean")
            state.showCart = payload
        else
            error('Not a Boolean')
    },

    addToCart(state, payload)
    {
        state.cart.push(payload)
    },

    removeFromCart(state, food_id)
    {
        state.cart = state.cart.reduce( (cart, food) => {
            if(food.id !== food_id)
                cart.push(food)
            return cart
        }, [])
        console.log('state', state.cart)
    }
}
