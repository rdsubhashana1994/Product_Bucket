<template>
    <div class="container">
        <h2 class="mt-4">Add Products</h2>
        <hr>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="formGroupExampleInput">Product Name</label>
                <input autofocus type="text"
                       class="form-control"
                       id="formGroupExampleInput"
                       name="product_name"
                       placeholder="Product Name"
                       v-model="item.name">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Quantity</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput2"
                       placeholder="Quantity"
                       v-model="item.quantity">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Price LKR</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput3"
                       placeholder="Price LKR"
                       v-model="item.price">
            </div>
            <button type="submit" class="btn btn-primary mt-3" v-show="item.name && item.quantity && item.price">
                Add to Bucket
            </button>
        </form>
        <div v-if="error" class="alert alert-warning" role="alert">
            {{ message }}
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                item: {
                    name: '',
                    quantity: '',
                    price: '',
                },
                error: false,
                message : ''
            }
        },
        methods: {
            submitForm() {
                //
                // console.log(this.item.product_name);
                // console.log(this.item.quantity);
                // console.log(this.item.price);

                this.$http.post("/api/addItem", this.item)
                    .then(function (response) {
                        if (response.data.success) {
                            alert(this.item.name + " added successfully!");
                            this.$router.push('/bucket');
                        } else {
                            this.error = true;
                            this.message = response.data.data;
                        }
                    });
            }
        }
    }
</script>
