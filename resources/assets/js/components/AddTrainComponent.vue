<template>
    <div class="container">
        <div class="card-panel">
            <h5><i class="material-icons left">train</i>Add Train</h5>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input v-model="train.number" id="number" type="number" class="validate">
                            <label for="number">Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input v-model="train.name" id="name" type="text" class="validate">
                            <label for="name">Name (If available)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div>
                                <label class="">Type</label>
                                <select v-model="train.type" id="type" class="browser-default">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="Colombo Commuter">Colombo Commuter</option>
                                    <option value="Express Txrain">Express Train</option>
                                    <option value="Mixed Train">Mixed Train</option>
                                    <option value="Long Distance">Long Distance</option>
                                    <option value="Night Mail">Night Mail</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <label>Frequency</label>
                            <select class="browser-default" v-model="train.frequency" >
                                <option value="" disabled selected>Choose your option</option>
                                <option value="Daily">Daily</option>
                                <option value="Monday to Friday except holidays">Monday to Friday except holidays</option>
                                <option value="Monday to Friday">Monday to Friday</option>
                                <option value="NSU">NSU</option>
                                <option value="NS,NSU">NS,NSU</option>
                                <option value="NS,NSU,NHO">NS,NSU,NHO</option>
                            </select>
                            <label>Frequency</label>
                        </div>
                    </div>
                    <div class="row">
                        <div v-model="train.remarks" class="input-field col s12">
                            <textarea id="remarks" class="materialize-textarea"></textarea>
                            <label for="remarks">Remarks (If any)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 right-align">
                            <button class="btn waves-effect waves-light" v-on:click="submit" id="submit-train" type="button" name="submit-train">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                errors:[],
                train:{
                    number:null,
                    name:"",
                    type:null,
                    frequency:null,
                    remarks:""
                }
            }
        },

        methods:{
            submit(){
                this.validate();
            },

            validate(){
                if(this.number==null){
                    this.errors.push("Please enter the Train number");
                }

                if(this.type==null){
                    this.errors.push("Please enter the Train type");
                }

                if(this.frequency==null){
                    this.errors.push("Please enter the Train frequency");
                }
            }
        }
    }
</script>
