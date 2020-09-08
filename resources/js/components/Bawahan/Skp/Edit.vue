<template>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Tambah Sasaran Kerja Pegawai</div>

                            <div class="card-body">
                                <form @submit.prevent="edit" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="iku" class="col-md-4 col-form-label text-md-right">IKU</label>

                                        <div class="col-md-6">
                                            <select v-model="skp.iku" class="form-control">
                                                <option>Prosedur</option>
                                                <option>Standard</option>
                                                <option>Other</option>
                                            </select>
                                            <span v-if="errors.iku" class="error">"Kolom IKU Perlu Diisi"</span>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label for="ta" class="col-md-4 col-form-label text-md-right">Tupoksi Atasan</label>

                                        <div class="col-md-6">
                                            <select v-model="skp.ta" class="form-control">
                                                <option>Prosedur</option>
                                                <option>Standard</option>
                                                <option>Other</option>
                                            </select>
                                            <span v-if="errors.ta" class="error">"Kolom Tupoksi Atasan Perlu Diisi"</span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="tj" class="col-md-4 col-form-label text-md-right">Tupoksi Jabatan</label>

                                        <div class="col-md-6">
                                            <select v-model="skp.tj" class="form-control">
                                                <option>Prosedur</option>
                                                <option>Standard</option>
                                                <option>Other</option>
                                            </select>
                                            <span v-if="errors.tj" class="error">"Kolom Tupoksi Jabatan Perlu Diisi"</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="skj" class="col-md-4 col-form-label text-md-right">Sasaran Kerja Pegawai</label>

                                        <div class="col-md-6">
                                            <textarea class="input form-control" placeholder="Text input" v-model="skp.skj"></textarea>
                                            <span v-if="errors.skj" class="error">"Kolom Sasaran Kerja Pegawai Perlu Diisi"</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jo" class="col-md-4 col-form-label text-md-right">Jenis Output</label>

                                        <div class="col-md-6">
                                            <select v-model="skp.jo" class="form-control">
                                            <option>Kualitatif</option>
                                            <option>Kuantitatif</option>
                                            </select>
                                            <span v-if="errors.jo" class="error">"Kolom Jenis Output Perlu Diisi"</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="output" class="col-md-4 col-form-label text-md-right">Output</label>

                                        <div class="col-md-3">
                                            <input v-model="kualitatif" class="form-control" v-bind:disabled='skp.jo !== "Kualitatif"' type="text">
                                            
                                        </div>

                                        <div class="col-md-3">
                                            <select v-model="kuantitatif" class="form-control" v-bind:disabled='skp.jo !== "Kuantitatif"'>
                                            <option disabled value="">Pilih Output</option>
                                            <option>WTP</option>
                                            <option>Indeks</option>
                                            <option>Merit</option>
                                            </select>
                                        </div>
                         
                                    </div>

                                    <div class="col-6 offset-4 error" v-if="errors.output">
                                        <span class="error">"Kolom Output Perlu Diisi"</span>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="waktu" class="col-md-4 col-form-label text-md-right">Waktu</label>

                                        <div class="col-md-1">
                                            <select v-model="tanggal" class="form-control">
                                                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
                                                <option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
                                                <option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
                                                <option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
                                                <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
                                                <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option>
                                                <option>31</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <select v-model="bulan" class="form-control">
                                                <option>Januari</option>
                                                <option>Februari</option>
                                                <option>Maret</option>
                                                <option>April</option>
                                                <option>Mei</option>
                                                <option>Juni</option>
                                                <option>Juli</option>
                                                <option>Agustus</option>
                                                <option>September</option>
                                                <option>Oktober</option>
                                                <option>November</option>
                                                <option>Desember</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 offset-4 error" v-if="errors.tanggal || errors.bulan">
                                        <div v-if="errors.tanggal" class="error">"Kolom Tanggal Perlu Diisi"</div>
                                        <div v-if="errors.bulan" class="error mb-3">"Kolom Bulan Perlu Diisi"</div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="ak" class="col-md-4 col-form-label text-md-right">Angka Kredit</label>

                                        <div class="col-md-6">
                                            <input id="waktu" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>

                                        <div class="col-md-6">
                                            <input type="radio" id="unsurU" value="Unsur Utama" v-model="skp.kategori">
                                            <label for="unsurU">Unsur Utama</label>
                                            &nbsp;
                                            <input type="radio" id="unsurP" value="Unsur Penunjang" v-model="skp.kategori">
                                            <label for="unsurP">Unsur Penjunjang</label>
                                        </div>
                                    </div>
                                    <div class="col-6 offset-4 error" v-if="errors.kategori">
                                        "Kolom Kategori Perlu Diisi"
                                    </div>

                                    <div class="col-10 offset-1">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    </div>
                                    
                                </form>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
</template>

<script>
    export default {
        props: ['id'],
        data(){
            return{
                kualitatif:'',
                kuantitatif:'',
                tanggal:'',
                bulan:'',
                skpfetch:{},
                skp:{
                    id:'',
                    user_id:'',
                    iku:'',
                    ta:'',
                    tj:'',
                    skj:'',
                    jo:'',
                    output:'',
                    waktu:'',
                    kategori:''
                },
                errors:{
                    iku:false,
                    ta:false,
                    tj:false,
                    skj:false,
                    jo:false,
                    output:false,
                    bulan:false,
                    tanggal:false,
                    kategori:false
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        created(){
            this.fetchSkp(this.id);
        },
        methods: {
            checkForm: function (e) {
                if (this.skp.iku && this.skp.ta && this.skp.tj && this.skp.skj && this.skp.jo && this.skp.output && this.tanggal && this.bulan && this.skp.kategori) {
                    return true;
                } 

                this.errors = [];

                if (!this.skp.iku) {
                    this.errors.iku = true;
                }
                if (!this.skp.ta) {
                    this.errors.ta = true;
                }
                if (!this.skp.tj) {
                    this.errors.tj = true;
                }
                if (!this.skp.skj) {
                    this.errors.skj = true;
                }
                if (!this.skp.jo) {
                    this.errors.jo = true;
                }
                if (!this.skp.output) {
                    this.errors.output = true;
                }
                if (!this.tanggal) {
                    this.errors.tanggal = true;
                }
                if (!this.bulan) {
                    this.errors.bulan = true;
                }
                if (!this.skp.kategori) {
                    this.errors.kategori = true;
                }
                

            },
            fetchSkp(id){
                fetch(`/api/skp/${id}`)
                    .then(res => res.json())
                    .then(res => {
                        this.skpfetch = res.data; 
                        //Isi data
                        this.skp.user_id = this.skpfetch.user_id;
                        this.skp.iku = this.skpfetch.iku;
                        this.skp.ta = this.skpfetch.ta;
                        this.skp.tj = this.skpfetch.tj;
                        this.skp.skj = this.skpfetch.skj;
                        this.skp.jo = this.skpfetch.jo;
                        this.skp.output = this.skpfetch.output;
                        this.skp.kategori = this.skpfetch.kategori;
                        let split = this.skpfetch.waktu.split(" ");
                        this.tanggal = split[0];
                        this.bulan = split[1];
                        this.kualitatif = (this.skpfetch.jo === 'Kualitatif') ? this.skpfetch.output : '';
                        this.kuantitatif = (this.skpfetch.jo === 'Kuantitatif') ? this.skpfetch.output : '';
                        this.skp.id = id;
                    })
                    .catch(err => console.log(err));
            },
            edit(){
                this.skp.output = (this.skp.jo === 'Kuantitatif') ? this.kuantitatif : this.kualitatif;
                this.skp.waktu = this.tanggal + ' ' + this.bulan;
                if(this.checkForm()){
                    fetch('/api/skp', {
                        method: 'put',
                        body: JSON.stringify(this.skp),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        window.location = '/targetkinerja';                   
                    })
                    .catch(err => console.log(err));
                }
                
            }
        }
    }
</script>