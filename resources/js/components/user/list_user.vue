<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-users"></i> Data User
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#UserModal"><i class="fa fa-plus fa-fw"></i>Tambah
                            User</button>
                        <br>
                        <br>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="25%">Nama</th>
                                    <th width="25%">E-mail</th>
                                    <th width="15%">Tipe</th>
                                    <th width="25%">Waktu</th>
                                    <th width="15%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(user, index) in users" :key="user.id">
                                    <td>{{index+=1}}</td>
                                    <td>{{user.name}}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.type | uptext}}</td>
                                    <td>{{user.created_at | GetDate}}</td>
                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="UserModal" tabindex="-1" role="dialog"
            aria-labelledby="UserModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UserModalTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="SaveUser" @keydown="form.onKeydown($event)">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input placeholder="Masukkan Nama Lengkap" v-model="form.name" type="text" name="name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input placeholder="Masukkan Email" v-model="form.email" type="text" name="email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                <select v-model="form.type" class="form-control" :class="{'is-invalid':form.errors.has('type')}" >
                                    <option value="">- Pilih Tipe - </option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="author">Author</option>
                                </select>
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Bio</label>
                                <textarea v-model="form.bio" placeholder="Masukkan Bio (Opsional)" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" rows="2"></textarea>
                                <has-error :form="form" field="bio"></has-error>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input placeholder="Masukkan Password" v-model="form.password" type="password" name="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data (){
            return{
                users:{},
                form: new Form({
                    name:'',
                    email:'',
                    bio:'',
                    type:'',
                    password:''
                })
            }
        },
        methods:{
            LoadUsers(){
                axios.get("api/user").then(({data}) => (this.users = data.data))
            },
            SaveUser(){
                this.$Progress.start();
                this.form.post('api/user');

                $('#UserModal').modal('hide');
                Toast.fire({
                    type: 'success',
                    title: 'Berhasil Disimpan !'
                })
                Fire.$emit('AfterCreate')
                this.$Progress.finish()
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.LoadUsers();
            Fire.$on('AfterCreate', ()=>{
                this.LoadUsers();
            })
        }
    }

</script>
