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
            <div>
                <hr class="my-4">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">INFORMACIÓN DEL {{ typeParticipantPerson }} </span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                        </div>
                    </div>
                </div>
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
            <template v-if="this.participant[0].pivot.typeParticipant === 'USUFRUCTUARIO' || this.participant[0].pivot.typeParticipant === 'PROPIETARIO' || this.participant[0].pivot.typeParticipant === 'COMODATARIO'">
                <hr class="my-4">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">PARAMETROS DEL CONTRATO</span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group has-validation input-group mb-3"> 
                        <span class="input-group-text">Porcentaje Division Renta</span>
                        <input type="text" class="form-control" id="username">
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                    <input class="form-check-input" v-model="isResponsibleIVA" type="checkbox" role="switch" id="isResponsibleIVA">
                    <label class="form-check-label" for="isResponsibleIVA">Responsable de IVA</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                    <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
                    <label class="form-check-label" for="isIntegralProtection">Amparo Integral</label>
                    </div>
                </div>
            </template>
            <template v-if="this.participant[0].pivot.typeParticipant === 'USUFRUCTUARIO' || this.participant[0].pivot.typeParticipant === 'PROPIETARIO' || this.participant[0].pivot.typeParticipant === 'COMODATARIO'">
                <hr class="my-4">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">PARAMETROS DEL PAGO</span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group has-validation input-group mb-3"> 
                        <span class="input-group-text">Porcentaje Division Renta</span>
                        <input type="text" class="form-control" id="username">
                    <div class="invalid-feedback">
                        Your username is required.
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                    <input class="form-check-input" v-model="isResponsibleIVA" type="checkbox" role="switch" id="isResponsibleIVA">
                    <label class="form-check-label" for="isResponsibleIVA">Responsable de IVA</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                    <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
                    <label class="form-check-label" for="isIntegralProtection">Amparo Integral</label>
                    </div>
                </div>
            </template>
            
        </div>
    </form>
</template>
<script>
export default {
    name:'person',
    props:['participant'],
    data() {
        return {
            stateParticipante: 'CREAR',
            typePersonPerson: this.participant[0] ? this.participant[0].pivot.typePerson : typePersonPerson,
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