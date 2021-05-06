
new Vue({
    el: '#crud',
    created: function(){
        this.getCompanies();
    },

    data: {
        companies: [],
        newName: '',
        newMoney: '',
        newContact: '',
        newTelephone: '',
        newComent: '',
        errors: []
    },
    methods: {
        getCompanies: function() {
            var url = 'companies';
            axios.get(url).then(response => {
                this.companies = response.data
            });
        },

        createCompany: function() {
            var url = 'companies';
            axios.post(url, {
                name: this.newName,
                money: this.newMoney,
                contact: this.newContact,
                telephone: this.newTelephone,
                coment: this.newComent,

            }).then(response => {
                this.newName = '';
                this.newMoney = '';
                this.newContact = '';
                this.newTelephone = '';
                this.newComent = '';
                this.errors = [];
                toastr.success('Nueva empresa creada con éxito');
            }).catch(error => {
                this.errors = error.response.data
            });
        }
    }
});
