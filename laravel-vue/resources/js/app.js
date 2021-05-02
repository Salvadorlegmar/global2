
new Vue({
    el: '#crud',

    data: {
        companies: [],
        newNombre: '',
        newIngreso: 0,
        newContacto: '',
        newTelefono: '',
        newComent: '',
        errors: []
    },
    methods: {
        getCompanies: function() {
            var url = 'company';
            axios.get(url).then(response => {
                this.companies = response.data
            });
        },

        createCompany: function() {
            var url = 'company';
            axios.post(url, {
                nombre: this.newNombre,
                ingresos: this.newIngresos,
                contacto: this.newContacto,
                telefono: this.newTelefono,
                fecha: new Date(),
                coment: this.newComent,
                gestion: 0

            }).then(response => {
                this.newNombre = '';
                this.newIngresos = '';
                this.newContacto = '';
                this.newTelefono = '';
                this.newComent = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nueva empresa creada con éxito');
            }).catch(error => {
                this.errors = 'Corrija el error'
            });
        }
    }
});