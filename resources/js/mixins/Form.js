import axios from 'axios'

class Form
{
    constructor(route = '/', fields = {})
    {
        this.route = route
        this.fields = fields

        this.response = {}
    }

    submit()
    {
        axios.post(this.route, this.fields)
            .then(({data}) => this.response = data)
    }
}

export default {
    props: ['route', 'fields'],

    data() {
        return {
            form: new Form(this.route, this.fields)
        }
    }
}
