<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="typeParticipant">Tipo de participante</label>
                    <select class="form-select" id="typeParticipant" v-model="typeParticipant">
                        <option selected>Eliga una opción...</option>
                        <option value="ARRENDATARIO">ARRENDATARIO</option>
                        <option value="DEUDOR">DEUDOR</option>
                        <option value="PROPIETARIO">PROPIETARIO</option>
                        <option value="COMODATARIO">COMODATARIO</option>
                        <option value="USUFRUCTUARIO">USUFRUCTUARIO</option>

                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="typePerson">Tipo de persona</label>
                    <select class="form-select" id="typePerson" v-model="typePerson">
                        <option selected>Eliga una opción...</option>
                        <option value="Natural">Natural</option>
                        <option value="Juridica">Juridica</option>

                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Identificación</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeDni">
                        <option selected>Eliga una opción...</option>
                        <option value="CC">CC</option>
                        <option value="NIT">NIT</option>

                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation"> 
                    <span class="input-group-text">Número de Identificación</span>
                    <input type="text" class="form-control" id="username" v-model="dni">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <button class="w-100 btn btn-primary btn-lg" type="button" @click="findOnCreatePerson">{{ stateParticipante }} {{ typeParticipante }}</button>
            <div class="row">
                <hr class="my-4">
                <h4 class="mb-1">Información del {{ typeParticipant }}</h4>
                <div v-if="typePerson === 'Natural'" class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">Nombres Completos</span>
                        <input type="text" class="form-control" id="username" v-model="names">
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div v-if="typePerson === 'Juridica'" class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">Razon Social</span>
                        <input type="text" class="form-control" id="username" v-model="bussinessName">
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">Dirección de contacto</span>
                        <input type="text" class="form-control" id="username" v-model="addressPerson">
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">correo de contacto</span>
                        <input type="text" class="form-control" id="username" v-model="emailPerson" >
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group has-validation">
                        <span class="input-group-text">Telefono de contacto</span>
                        <input type="text" class="form-control" id="username" v-model="phonePerson" >
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                
            </div>
            <hr class="my-4">
            <div class="row">
                <h4 class="mb-1">Documentos del {{ typeParticipant }}</h4>
                <div v-if="typePerson === 'Juridica'" class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">RUT</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div v-if="typePerson === 'Juridica'" class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">CAMARA DE COMERCIO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">SOLICITUD DE ARENDAMIENTO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">INSPECCION E INVENTARIO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>     
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">ASEGURABLE O APROVADO</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">INVENTARIO DE ENTREGA</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>            
            </div>
        </div>

        <hr class="my-4">{{ this.participant[0].pivot.typePerson }}

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar</button>
    </form>
</template>
<script>
export default {
    name:'person',
    props:['participant'],
    data() {
        return {
            stateParticipante: 'CREAR',
            typePerson: this.participant ? this.participant[0].typePerson : typePerson,
            typeParticipant: this.participant ? this.participant[0].pivot.typePerson : typeParticipant,
            dni: '',
            bussinessName: '',
            names: this.participant ? this.participant[0].names : names,
            typeDni:'',
            addressPerson: '',
            phonePerson: '',
            emailPerson: '',
            detailPersonView: false,
            detailPersonDocumentView: false
        }
    },
    methods: {
        findOnCreatePerson() {
            this.stateParticipante = 'GUARDAR'
            this.detailPersonView = !this.detailPersonView;
            this.detailPersonDocumentView = !this.detailPersonDocumentView;
        }
    }
}
</script>