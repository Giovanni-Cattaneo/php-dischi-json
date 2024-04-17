const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            discs: [],
            api_url: 'disc.json'
        }
    },
    mounted() {
        axios.get(this.api_url).then((result) => {
            console.log(result)
            this.discs = result.data
            console.log(this.discs)
        })
    }
}).mount('#app')