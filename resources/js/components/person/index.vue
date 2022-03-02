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
            
            <template v-if="this.participant[0].pivot.typeParticipant === 'USUFRUCTUARIO' || this.participant[0].pivot.typeParticipant === 'PROPIETARIO' || this.participant[0].pivot.typeParticipant === 'COMODATARIO'">        
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">PARAMETROS DEL CONTRATO</span>
                            <div class="float-right">
                                <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            {{ notificationParametersContract }}
                        </div>
                        <div class="row g-3">
                            <div class="col-4">
                                <div class="input-group has-validation input-group mb-3"> 
                                    <span class="input-group-text">Porcentaje Division Renta</span>
                                    <input type="text" class="form-control" id="rentSplitPercentage" v-model="rentSplitPercentage">
                                <div class="invalid-feedback">
                                    Your username is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-switch">
                                <input class="form-check-input" v-model="isIVAResponsible" type="checkbox" role="switch" id="isIVAResponsible">
                                <label class="form-check-label" for="isIVAResponsible">Responsable de IVA</label>
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
                                <input class="form-check-input" v-model="itIsGuaranteed" type="checkbox" role="switch" id="itIsGuaranteed">
                                <label class="form-check-label" for="itIsGuaranteed">Garantizado</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </template>
            <template v-if="this.participant[0].pivot.typeParticipant === 'USUFRUCTUARIO' || this.participant[0].pivot.typeParticipant === 'PROPIETARIO' || this.participant[0].pivot.typeParticipant === 'COMODATARIO'">        
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">CONFIGURACIÓN DE PAGOS</span>
                            <div class="float-right">
                                <a class="btn btn-success btn-sm" href="#"> Grabar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="bankingEntity">Entidad Bancaria</label>
                                    <select class="form-select" id="bankingEntity" v-model="bankingEntity">
                                        <option value="BANCAMIA S.A.">BANCAMIA S.A.</option>
                                        <option value="BANCO AGRARIO">BANCO AGRARIO</option>
                                        <option value="BANCO AV VILLAS">BANCO AV VILLAS</option>
                                        <option value="BANCO BBVA COLOMBIA S.A.">BANCO BBVA COLOMBIA S.A.</option>
                                        <option value="BANCO CAJA SOCIAL">BANCO CAJA SOCIAL</option>
                                        <option value="BANCO COOPERATIVO COOPCENTRAL">BANCO COOPERATIVO COOPCENTRAL</option>
                                        <option value="BANCO CREDIFINANCIERA">BANCO CREDIFINANCIERA</option>
                                        <option value="BANCO DAVIVIENDA">BANCO DAVIVIENDA</option>
                                        <option value="BANCO DE BOGOTA">BANCO DE BOGOTA</option>
                                        <option value="BANCO DE OCCIDENTE">BANCO DE OCCIDENTE</option>
                                        <option value="BANCO FALABELLA">BANCO FALABELLA</option>
                                        <option value="BANCO GNB SUDAMERIS">BANCO GNB SUDAMERIS</option>
                                        <option value="BANCO ITAU">BANCO ITAU</option>
                                        <option value="BANCO PICHINCHA S.A.">BANCO PICHINCHA S.A.</option>
                                        <option value="BANCO POPULAR">BANCO POPULAR</option>
                                        <option value="BANCO SANTANDER COLOMBIA">BANCO SANTANDER COLOMBIA</option>
                                        <option value="BANCO SERFINANZA">BANCO SERFINANZA</option>
                                        <option value="BANCOLOMBIA">BANCOLOMBIA</option>
                                        <option value="BANCOOMEVA S.A.">BANCOOMEVA S.A.</option>
                                        <option value="CFA COOPERATIVA FINANCIERA">CFA COOPERATIVA FINANCIERA</option>
                                        <option value="CITIBANK">CITIBANK</option>
                                        <option value="COLTEFINANCIERA">COLTEFINANCIERA</option>
                                        <option value="CONFIAR COOPERATIVA FINANCIERA">CONFIAR COOPERATIVA FINANCIERA</option>
                                        <option value="COOFINEP COOPERATIVA FINANCIERA">COOFINEP COOPERATIVA FINANCIERA</option>
                                        <option value="COTRAFA">COTRAFA</option>
                                        <option value="SCOTIABANK COLPATRIA">SCOTIABANK COLPATRIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="accountType">Tipo de Cuenta</label>
                                    <select class="form-select" id="accountType" v-model="accountType">
                                        <option value="AHORROS">AHORROS</option>
                                        <option value="CORRIENTE">CORRIENTE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group has-validation input-group mb-3"> 
                                    <span class="input-group-text">Numero de Cuenta</span>
                                    <input type="text" class="form-control" id="accountNumber" v-model="accountNumber">
                                <div class="invalid-feedback">
                                    Your username is required.
                                    </div>
                                </div>
                            </div>    
                            <div class="col-4">
                                <div class="form-check form-switch">
                                <input class="form-check-input" v-model="isConsignmentPayment" type="checkbox" role="switch" id="isConsignmentPayment">
                                <label class="form-check-label" for="isConsignmentPayment">Pago por Consignación</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </template>    

            <h4 class="mb-1">Documentos del {{ typeParticipantPerson }}</h4>
            <Documents :component="typeParticipantPerson" :listDocuments="documents" :contractDocuments="contract.contract_documents"/>
        </div>
        
    </form>
</template>
<script>
import Documents from "../documents/index.vue";
export default {
    name:'person',
    props:['contract','participant', 'documents'],
    components: {
        Documents
    },
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
            rentSplitPercentage: this.participant[0] ? this.participant[0].pivot.rentSplitPercentage : rentSplitPercentage,
            isIVAResponsible: this.participant[0].pivot.isIVAResponsible ? true : false,
            isIntegralProtection: this.participant[0].pivot.isIntegralProtection ? true : false,
            itIsGuaranteed: this.participant[0].pivot.itIsGuaranteed ? true : false,
            bankingEntity: this.participant[0] ? this.participant[0].pivot.bankingEntity : bankingEntity,
            accountType: this.participant[0] ? this.participant[0].pivot.accountType : accountType,
            accountNumber: this.participant[0] ? this.participant[0].pivot.accountNumber : accountNumber,
            isConsignmentPayment: this.participant[0].pivot.isConsignmentPayment ? true : false,
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