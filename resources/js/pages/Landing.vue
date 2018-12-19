<template>
	<div class="container">
		<loader v-show="loaded" theme="dark" text="Loading News"></loader>

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
			      required>
			    <b-form-input type="text" id="name" v-model.trim="name" required></b-form-input>
			    <span class="text-danger" v-if="!name">{{convertToString(errorMessage.name)}}</span>
			</b-form-group> 

			<b-form-group
			      id="url"
			      description="Set your url."
			      label="*Url"
			      label-for="name">
			      <b-input-group append=".seapayroll.com">
			    	<b-form-input type="text" id="url" v-model.trim="url" required></b-form-input>
			      </b-input-group>
			    <span class="text-danger" v-if="!name">{{convertToString(errorMessage.url)}}</span>
			</b-form-group> 

			<b-form-group
			      id="email"
			      type="email"
			      description="Set email for your SeaPayroll account."
			      label="*Email"
			      required
			      label-for="email">
			    <b-form-input id="email" v-model.trim="email" required></b-form-input>
			    <span class="text-danger" >{{convertToString(errorMessage.company_email)}}</span>
			</b-form-group>

			<b-form-group
			      id="password"
			      description="Set password for your SeaPayroll account."
			      label="*Password"
			      label-for="password">
			    <b-form-input id="password" type="password" v-model.trim="password" required></b-form-input>
			    <span class="text-danger">{{convertToString(errorMessage.password)}}</span>
			</b-form-group>

			<b-form-group
			      id="company_name"
			      description="Let us know your company name."
			      label="*Company Name"
			      label-for="company_name"
			      required>
			    <b-form-input id="company_name" v-model.trim="company_name"></b-form-input>
			    <span class="text-danger" v-if="!company_name">{{convertToString(errorMessage.company_name)}}</span>
			</b-form-group>

			<b-form-group
			      id="company_address"
			      description="Let us know your company address."
			      label="Company Address"
			      label-for="company_address">
			    <b-form-input id="company_address" v-model.trim="company_address"></b-form-input>
			</b-form-group>

			<b-form-group
			      id="phone_number"
			      description="Let us know your phone number."
			      label="Phone Number"
			      label-for="phone_number">
			    <b-form-input id="phone_number" v-model.trim="phone_number"></b-form-input>
			</b-form-group>

			<b-form-group
			     <b-button @click="onSubmit">Submit</b-button>
			</b-form-group>

			<p>By submitting this form, you are agreeing to SEAPAYROLL Privacy Policy and Terms and Condition.</p>
		</b-card>


	   		<div>
			    <b-modal ref="myModalRef" hide-footer title="Done">
			      <div class="d-block text-center">
			        <h4>We have sent a verification email to {{email}}. Once your email address is verified your SeaPayroll dashboard will be create.</h4>
			      </div>
			      <b-btn class="mt-3" variant="outline-danger" block @click="hideModal">Close Me</b-btn>
			    </b-modal>
			</div>
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
	span {
		font-size: 11px;
	}
</style>

<script>
import { required, minLength, between } from 'vuelidate/lib/validators'

export default {

mounted() {
        this.companies.fetch();
        console.log(this.state);
    },
  
	validations: {
	    name: {
	      required,
	    },
	    email: {
	      between: required
	    }
	  },

methods :{

	//submit company details and save to database using vue eloquent
	onSubmit: function() {
			
			this.loaded = true;
	        this.companies
	            .create({ 
	            	name: this.name,
	            	company_email: this.email,
	            	phone_number: this.phone_number,
	            	company_name: this.company_name,
	            	company_address: this.company_address,
	            	url: this.url,
	            	password: this.password
	            })
	            .then(response => {
	            	console.log(response.data)
	                this.message = '';
	                this.$refs.myModalRef.show();
	                this.loaded = false;
	            }, error => {
	            	var errorMessage;
	            	this.errorMessage = error.response.data.errors
	            	console.log(this.errorMessage.company_email.toString());
	            	this.loaded = false;
	            });
		
        
    },

    //convert array to string
    convertToString: function(data) {
    	var value;

    	if (!data) {
    		return '';
    	} else {
    		return data + " ";
    	}

    },

    showModal: function() {

      this.$refs.myModalRef.show()

    },

    hideModal: function() {

      location.reload();

    }

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
      errorMessage: [],
      password:'',
      url:'',
      loaded: false,
      modalMessage: '',
      companies: this.$collection({
                    url: '/api/companies'
                }),
    }
  }
}
</script>