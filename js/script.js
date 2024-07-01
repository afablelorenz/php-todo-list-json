const { createApp } = Vue

createApp({

    data() {
        return {
            toDoTasks: [],
            newTask: ''m
        }
    },
    created(){
        this.getTasks();
    },
    methods: {
        getTasks(){
            axios.get('../json/toDoList.json')
                .then(response =>{
                    this.tasks = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        
    }

}).mount('#app')