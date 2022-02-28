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
                <div class="card-body">
                    <div class="row g-3">
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
                        <div class="col-4">
                            <div class="input-group has-validation input-group mb-3">
                                <span class="input-group-text">Telefono</span>
                                <input type="text" class="form-control" id="phonePerson" v-model="phonePerson" >
                                <div class="invalid-feedback">
                                Your username is required.
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>          
            </div>   
            <div>        
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">PARAMETROS DEL CONTRATO</span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-danger" role="alert">
                            {{ notificationParametersContract }}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
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
                            <div class="col-4">
                                <div class="form-check form-switch">
                                <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
                                <label class="form-check-label" for="isIntegralProtection">Garantizado</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <div>        
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">CONFIGURACIÓN DE PAGOS</span>
                        <div class="float-right">
                            <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Entidad Bancaria</label>
                                    <select class="form-select" id="inputGroupSelect01" v-model="typeEstate">
                                        <option value="BANCOLOMBIA">BANCOLOMBIA</option>
                                        <option value="BANCO DE BOGOTA">BANCO DE BOGOTA</option>
                                        <option value="BANCO FALABELLA">BANCO FALABELLA</option>
                                        <option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option>
                                        <option value="BANCO BBVA">BANCO BBVA</option>
                                        <option value="NO DEFINIDO">NO DEFINIDO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Cuenta</label>
                                    <select class="form-select" id="inputGroupSelect01" v-model="typeEstate">
                                        <option value="AHORROS">AHORROS</option>
                                        <option value="CORRIENTE">CORRIENTE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group has-validation input-group mb-3"> 
                                    <span class="input-group-text">Numero de Cuenta</span>
                                    <input type="text" class="form-control" id="username">
                                <div class="invalid-feedback">
                                    Your username is required.
                                    </div>
                                </div>
                            </div>    
                            <div class="col-4">
                                <div class="form-check form-switch">
                                <input class="form-check-input" v-model="isResponsibleIVA" type="checkbox" role="switch" id="isResponsibleIVA">
                                <label class="form-check-label" for="isResponsibleIVA">Pago por Consignación</label>
                                </div>
                            </div>                        
                            <div class="col-4">
                                <div class="form-check form-switch">
                                <input class="form-check-input" v-model="isIntegralProtection" type="checkbox" role="switch" id="isIntegralProtection">
                                <label class="form-check-label" for="isIntegralProtection">Amparo Integral</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>         
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
            isResponsibleIVA: this.participant[0].pivot.typePerson === 'JURIDICA' ? true : false,
            detailPersonView: false,
            detailPersonDocumentView: false,
            notificationParametersContract: 'IMPORTANTE: Este contrato estan suscritos (3) participantes como propietarios, asigne el porcentaje de comision para cada participante'
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