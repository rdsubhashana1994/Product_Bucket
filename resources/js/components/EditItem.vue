<template>
    <div class="container">
        <h2 class="mt-4">Update Products</h2>
        <hr>
        <form @submit.prevent = "updateOnAction">
            <div class="form-group">
                <label for="formGroupExampleInput">Product Name</label>
                <input autofocus type="text"
                       class="form-control"
                       id="formGroupExampleInput"
                       name="product_name"
                       placeholder="Product Name"
                       v-model = "products.name"
                >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Quantity</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput2"
                       placeholder="Quantity"
                       v-model = "products.quantity"
                >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Price LKR</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput3"
                       placeholder="Price LKR"
                       v-model = "products.price"
                >
            </div>
            <button type="submit"
                    class="btn btn-primary mt-3"
            >
                Update the Item
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        created() {
            this.getData();
        },
        data(){
            return {
                products: {}
            }
        },
        methods: {
            getData() {
                this.$http.get("/api/getAnItem/"+this.$route.params.id)
                    .then(function (response) {
                        this.products = response.body.data;
                    })
            },
            updateOnAction() {
                this.$http.put("/api/editItem/"+this.$route.params.id)
                    .then(function (response) {
                        this.$router.push("/bucket");
                    })
            }
        }
    }
</script>
