<template>
    <section class="col-4 offset-4">

        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

        <div class="alert alert-danger" v-show="hasErrors">
            <p v-for="error in errors">{{error[0]}}</p>
        </div>

        <div class="alert alert-success" v-show="isSuccess">
            The form was sent
        </div>

        <div class="row">

            <!--Grid column-->
            <div class="col-12">
                <form id="contact-form" name="contact-form" >

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" v-model="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="phone" name="phone" v-model="phone" class="form-control">
                                <label for="phone" class="">Your phone</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" v-model="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" @click="sendMessage">Send</a>
                </div>

            </div>

        </div>

    </section>
</template>

<script>
    export default {
        name: "App",
        data: () => {
            return {
                name: "",
                phone: "",
                message: "",
                errors: [],
                hasErrors: false,
                isSuccess: false,
            }
        },
        methods: {
            sendMessage() {
                axios.post('/api/send', {
                    name: this.name,
                    phone: this.phone,
                    message: this.message
                }).then(response => {this.successSent(response)}
                ).catch(error => {this.errors = error.response.data.errors; this.hasErrors = true});
            },
            successSent(response) {
                if (response.data === true) {
                    this.hasErrors = false;
                    this.isSuccess = true;
                    this.name =  '';
                    this.phone = '';
                    this.message = '';
                } else {
                    this.hasErrors = true;
                    this.isSuccess = false;
                    this.errors = ['Something went wrong']
                }

            }
        }
    }
</script>

