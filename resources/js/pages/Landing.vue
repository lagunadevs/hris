<template>
	<div class="container">

		<b-jumbotron bg-variant="info" text-variant="white" border-variant="dark">
		  <template slot="header">
		    Lorem Ipsum
		  </template>
		  <template slot="lead">
		    Register to setup you dashboard.
		  </template>
		</b-jumbotron>

		<b-card bg-variant="light">
			<b-form-group
			      id="fieldset1"
			      description="Let us know your name."
			      label="*Your Name"
			      label-for="name"
			      :invalid-feedback="invalidFeedback"
			      :valid-feedback="validFeedback"
			      :state="state">
			    <b-form-input type="text" id="name" :state="state" v-model.trim="name"></b-form-input>
			</b-form-group>

			<b-form-group
			      id="email"
			      type="email"
			      description="Let us know your company email."
			      label="*Company Email"
			      label-for="email"
			      :invalid-feedback="invalidFeedbackEmail"
			      :valid-feedback="validFeedbackEmail"
			      :state="validateEmail">
			    <b-form-input id="email" :state="validateEmail" v-model.trim="email"></b-form-input>
			</b-form-group>

			<b-form-group
			      id="company_name"
			      description="Let us know your company name."
			      label="*Company Name"
			      label-for="company_name"
			      :invalid-feedback="invalidFeedbackCompanyName"
			      :valid-feedback="validFeedbackCompanyName"
			      :state="stateCompanyName">
			    <b-form-input id="company_name" :state="stateCompanyName" v-model.trim="company_name"></b-form-input>
			</b-form-group>

			<b-form-group
			      id="company_address"
			      description="Let us know your company address."
			      label="*Company Address"
			      label-for="company_address"
			      :invalid-feedback="invalidFeedbackCompanyAddress"
			      :valid-feedback="validFeedbackCompanyAddress"
			      :state="stateCompanyAddress">
			    <b-form-input id="company_address" :state="stateCompanyAddress" v-model.trim="company_address"></b-form-input>
			</b-form-group>

			<b-form-group
			      id="phone_number"
			      description="Let us know your phone number."
			      label="*Phone Number"
			      label-for="phone_number"
			      :invalid-feedback="invalidFeedbackPhoneNumber"
			      :valid-feedback="validFeedbackPhoneNumber"
			      :state="validatePhone">
			    <b-form-input id="phone_number" :state="validatePhone" v-model.trim="phone_number"></b-form-input>
			</b-form-group>

			<b-form-group
			     <b-button @click="addCompany">Submit</b-button>
			</b-form-group>

			<p>By submitting this form, you are agreeing to SEAPAYROLL Privacy Policy and Terms and Condition.</p>
		</b-card>
	</div>
</template>

<style type="text/css">
	.container {
		padding-top: 1%;
		padding-bottom: 1%;
		width: 40%;
	}

	p {
		font-size: 11px;
		padding-top: 20px;

	}
</style>

<script>

export default {

mounted() {
        this.companies.fetch();
    },
  computed: {

    state () {

    	if (this.name.length < 3) {

    		return null;

    	} else {

    		return this.name.length >= 3 ? true : false

    	}    	

    },

    invalidFeedback () {

	    if (this.name.length > 3) {
	        return ''
	    } else if (this.name.length > 0) {
	        return 'Enter at least 3 characters'
	    }

    },

    validFeedback () {

      	return this.state === true ? 'Thank you' : '';

    },



    validateEmail() {

    	if (this.email.length < 3) {

    		return null;

    	} else {

    		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(this.email);

    	}
		

	},

    validFeedbackEmail() {

      	return this.validateEmail === true ? 'Thank you' : ''

    },

    invalidFeedbackEmail() {

    	if (this.email.length > 3) {
    		if (this.validateEmail === false) {
		        return 'Please provide valid email!'
		    }
    	}

    },

    stateCompanyName() {

    	if (this.company_name.length < 2) {

    		return null;

    	} else {

    		return this.company_name.length >= 2 ? true : false

    	} 	

    },

    validFeedbackCompanyName() {

    	return this.stateCompanyName === true ? 'Thank you' : ''

    },

    invalidFeedbackCompanyName() {

	    if (this.company_name.length > 2) {
	        return ''
	    } else if (this.company_name.length > 0) {
	        return 'Enter at least 2 characters'
	    }

	},

	validatePhone() {

		if (this.phone_number < 3) {

			return null;

		} else {

			var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
	  		return re.test(this.phone_number);

		}
	  

	},

	invalidFeedbackPhoneNumber() {

		if (this.phone_number.length > 3) {
    		if (this.validatePhone === false) {
		        return 'Please provide valid phone number!'
		    }
    	}

	},

	validFeedbackPhoneNumber() {

		return this.validatePhone === true ? 'Thank you' : ''
		
	},


	stateCompanyAddress() {

		if (this.company_address.length < 3) {

			return null;

		} else {

			return this.company_address.length >= 3 ? true : false

		}  	

    },

    invalidFeedbackCompanyAddress() {

	    if (this.company_address.length > 3) {

	        return ''

	    } else if (this.company_address.length > 0) {

	        return 'Enter at least 3 characters'

	    }

    },

    validFeedbackCompanyAddress() {

      	return this.stateCompanyAddress === true ? 'Thank you' : '';

    },

},


methods :{

	validation() {
		console.log(this.state)
		if (!this.state) {
			return this.state = false;

		} else if (!this.validateEmail) {

			return false;

		} else if (!this.stateCompanyName) {

			return false;

		} else if (!this.validatePhone) {

			return false;

		} else if (!this.stateCompanyAddress) {

			return false;

		} else {

			return true;
		}
	},

	//submit company details and save to database using vue eloquent
	addCompany() {

		if (!this.validation) { }
	        this.companies
	            .create({ 
	            	name: this.name,
	            	company_email: this.email,
	            	phone_number: this.phone_number,
	            	company_name: this.company_name,
	            	company_address: this.company_address
	            })
	            .then(resp => {
	                this.message = '';
	            });
        
    },

},


  data () {
    return {
      name: '',
      email: '',
      company_name: '',
      phone_number: '',
      company_address: '',
      status: '',
      message: '',
      companies: this.$collection({
                    url: '/api/companies'
                }),
    }
  }
}
</script>