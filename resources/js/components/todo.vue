<template>
    <div class="bg-white rounded shadow p-6 mb-6 w-full max-h-screen-1/2 overflow-y-scroll">
        <div class="mb-4">
            <h3 class="text-indigo-light mb-3">Add A Fuel Order</h3>
            <div class="flex">
				<input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" v-model="newTodo" @keyup.enter="add" placeholder="Text">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" v-model="client_name" @keyup.enter="add" placeholder="Client">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" v-model="site_name" @keyup.enter="add" placeholder="Site">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" v-model="tank_name" @keyup.enter="add" placeholder="Tank">
<div class="w-full md:w-1/3 pl-0 pr-4 mb-6 md:mb-0">

      <div class="relative">
        <select class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" id="grid-state">
          <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
						<button class="bg-white border border-indigo hover:text-white hover:font-bold hover:border-indigo-darker hover:bg-indigo-darker text-indigo border-indigo font-bold py-2 px-4 rounded inline-flex items-center" @click="add" :disabled="newTodo.length === 0">
						<svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11 9h4v2h-4v4H9v-4H5V9h4V5h2v4zm-1 11a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/></svg>
	  					<span>Add</span>
					</button>
			</div>
        </div>
    <div>
	<div class="flex mb-4 items-center" v-for="(todo, index) in todos" :key="todo.id">
    <input type="checkbox" class="mr-2 leading-tight" @click="updateStatus(todo)">

    <p class="w-full text-grey-darker text-2xl" :class="todo.finished ? 'line-through text-grey-dark' : 'text-grey-darker'">{{todo.text}}</p>
    <p class="w-full text-grey-darker text-2xl" :class="todo.finished ? 'line-through text-grey-dark' : 'text-grey-darker'">{{todo.client_name}}</p>
    <p class="w-full text-grey-darker text-2xl" :class="todo.finished ? 'line-through text-grey-dark' : 'text-grey-darker'">{{todo.site_name}}</p>
    <p class="w-full text-grey-darker text-2xl" :class="todo.finished ? 'line-through text-grey-dark' : 'text-grey-darker'">{{todo.tank_name}}</p>

    <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red" @click="remove(index)">Remove</button>
    </div>
    <div v-show="todos.length === 0">
	    <p class="w-full text-center text-grey-dark">There are no fuel orders</p>
    </div>
        </div>
    </div>
</template>

<script>
    export default{
		created() {
		  this.getTodos();
		},
        data(){
            return{
                todos: [],
                newTodo: '',
                baseId: 1,
                client_name: '',
                site_name: '',
                tank_name: '',
            }
        },
        methods: {
			getTodos() {
			  const t = this;
  			axios.get('/todos')
      		.then(({data}) => {
        	t.todos = data;
     	 });
		},
            add() {
              const t = this;
			if(t.newTodo.length > 0) {
              let todo = {
                id: t.baseId,
                text: t.newTodo,
                client_name: t.client_name,
                site_name: t.site_name,
                tank_name: t.tank_name,
                finished: false,
              }

              t.todos.unshift(todo);
              t.client_name = '',
              t.site_name = '',
              t.tank_name = '',
              t.newTodo = '';
              t.baseId++;
				}
            },
            updateStatus(todo) {
              todo.finished = !todo.finished;
            },
            remove(index) {
              const t = this;

              t.todos.splice(index, 1);
            }
        }
    }
</script>
