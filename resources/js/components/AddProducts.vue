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

            <div class="form-group">
                <label for="">Item Image</label>
                <input type="file"
                       name="image"
                       class="form-control"
                       placeholder="Image"
                       @change="getImageOnAction($event)"
                >
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
                    image:''
                },
                error: false,
                message : ''
            }
        },
        methods: {
            submitForm() {
                const formData = new FormData();

                formData.append('image', this.item.image);
                formData.append('name', this.item.name);
                formData.append('quantity', this.item.quantity);
                formData.append('price', this.item.price);

                this.$http.post("/api/addItem", formData, {
                    headers: {'Content-Type': 'multipart/form-data' }
                }).then(function (response) {
                    if (response.data.success) {
                        alert(this.item.name + " added successfully!");
                        this.$router.push('/bucket');
                    } else {
                        this.error = true;
                        this.message = response.data.data;
                    }
                });
            },
            getImageOnAction(event) {
                this.item.image = event.target.files[0];
            }
        }
    }
</script>
