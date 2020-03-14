export default {
    state: {
        employees: []
    },
    getters: {
        employees(state){
            return state.employees;
        }
    },
    mutations: {
        updateEmployees(state, payload){
            state.employees = payload;
        }
    },
    actions: {
        getEmployees(context){
            axios.get('/api/employees')
                .then( response => {
                    context.commit('updateEmployees', response.data.employees.data);
                })
        },
        createEmployees(context, payload){
            axios.post('/api/employees', payload)
                .then( response => {
                    // context.commit('updateEmployees', response.data.employees);
                    console.log(response)
                })
        },
        getEmployee(context, id){
            // console.log('something', id)
            axios.get(`/api/employees/`+id)
                .then( response => {
                    context.commit('updateEmployees', response.data.employee);
                })
        }
    }
}
