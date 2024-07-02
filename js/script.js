const { createApp } = Vue

createApp({

    data() {
        return {
            toDoTasks: [],
            newTask: '',
        }
    },
    created(){
        this.getTasks();
    },
    methods: {
        getTasks(){
            axios.get('./todo.php')
                .then(response =>{
                    this.toDoTasks = response.data;
                })
                .catch(error => {
                    console.log(error);
                })
        },
        addTask(){
            if(this.newTask.trim() !== ''){
                const task = this.newTask;
                this.newTask = '';
                window.location.href = `./todo.php?task=${encodeURIComponent(task)}`;
            }
        },
        handleSubmit(event){
            event.preventDefault();
            this.addTask();
        }
    }

}).mount('#app')