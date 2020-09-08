<template>
    <div class="form-group row">
        <label for="pegawai" class="col-md-4 col-form-label text-md-right">Pegawai Yang Ditugaskan</label>

        <div class="col-md-7">
            <input id="myInput" type="text" name="pegawai" class ="form-control">
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
