<template>
    <div class="container">

        <h2 class="mt-4">Update Products</h2>

        <hr>

        <form>

            <div class="form-group">
                <label for="formGroupExampleInput">Product Name</label>
                <input autofocus type="text"
                       class="form-control"
                       id="formGroupExampleInput"
                       name="product_name"
                       placeholder="Product Name"
                >
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput2">Quantity</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput2"
                       placeholder="Quantity"
                >
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput3">Price LKR</label>
                <input type="number"
                       class="form-control"
                       id="formGroupExampleInput3"
                       placeholder="Price LKR"
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

</script>
