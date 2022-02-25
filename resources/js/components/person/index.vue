<template>
    <form class="needs-validation" novalidate>
        <div class="row g-3">
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de participante</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeParticipantPerson">
                        <option selected>Eliga una opción...</option>
                        <option value="NO DEFINIDO">NO DEFINIDO</option>
                        <option value="ARRENDATARIO">ARRENDATARIO</option>
                        <option value="DEUDOR">DEUDOR</option>
                        <option value="PROPIETARIO">PROPIETARIO</option>
                        <option value="COMODATARIO">COMODATARIO</option>
                        <option value="USUFRUCTUARIO">USUFRUCTUARIO</option>
                        <option value="REPRESENTANTE LEGAL">REPRESENTANTE LEGAL</option>

                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect02">Tipo de persona</label>
                    <select class="form-select" id="inputGroupSelect02" v-model="typePersonPerson">
                        <option selected>Eliga una opción...</option>
                        <option value="NATURAL">NATURAL</option>
                        <option value="JURIDICA">JURIDICA</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Identificación</label>
                    <select class="form-select" id="inputGroupSelect01" v-model="typeDniPerson">
                        <option selected>Eliga una opción...</option>
                        <option value="CEDULA DE CIUDADANIA">CEDULA DE CIUDADANIA</option>
                        <option value="NIT">NIT</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group has-validation input-group mb-3"> 
                    <span class="input-group-text">Número de Identificación</span>
                    <input type="text" class="form-control" id="username" v-model="dniPerson">
                <div class="invalid-feedback">
                    Your username is required.
                    </div>
                </div>
            </div>
            <button class="w-100 btn btn-primary btn-lg" type="button" @click="findOnCreatePerson">{{ stateParticipante }} {{ typeParticipantPerson }}</button>
            <div class="row">
                <hr class="my-4">
                <h4 class="mb-1">Información del {{ typeParticipantPerson }}</h4>
                <div class="col-12">
                    <div class="input-group has-validation input-group mb-3">
                        <span class="input-group-text">Nombres Completos</span>
                        <input type="text" class="form-control" id="namesPerson" v-model="namesPerson">
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="input-group has-validation input-group mb-3">
                        <span class="input-group-text">Dirección de contacto</span>
                        <input type="text" class="form-control" id="addressPerson" v-model="addressPerson">
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group has-validation input-group mb-3">
                        <span class="input-group-text">correo de contacto</span>
                        <input type="text" class="form-control" id="emailPerson" v-model="emailPerson" >
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group has-validation input-group mb-3">
                        <span class="input-group-text">Telefono de contacto</span>
                        <input type="text" class="form-control" id="phonePerson" v-model="phonePerson" >
                        <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                
            </div>
            <hr class="my-4">
            <div class="row">
                <h4 class="mb-1">Documentos del {{ typeParticipantPerson }}</h4>
                <div class="col-12">
                    <small class="text-muted">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">RUT</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </small>
                </div>
                <div class="col-12">
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

        <hr class="my-4">{{ this.participant[0]}}
        
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
            typePerson: this.participant[0] ? this.participant[0].pivot.typePerson : typePerson,
            typeParticipantPerson: this.participant[0] ? this.participant[0].pivot.typeParticipant : typeParticipantPerson,
            dniPerson: this.participant[0] ? this.participant[0].dni : dniPerson,
            namesPerson: this.participant[0] ? this.participant[0].names : namesPerson,
            typeDniPerson: this.participant[0] ? this.participant[0].typeDni : typeDniPerson,
            addressPerson: this.participant[0] ? this.participant[0].address : addressPerson,
            phonePerson: this.participant[0] ? this.participant[0].phone : phonePerson,
            emailPerson: this.participant[0] ? this.participant[0].email : emailPerson,
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