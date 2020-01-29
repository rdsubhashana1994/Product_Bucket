<template>
    <div class="container">

        <h2>My Bucket</h2>

        <hr>

        <div id="products" class="row list-group">
            <div class="item  col-xs-4 col-lg-4" v-for="item in items">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h3 class="group inner list-group-item-heading"> {{item.name}}</h3>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h4>Price : LKR {{item.price}}</h4>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <h4>Quantity : {{item.quantity}}</h4>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <router-link class="btn btn-primary" :to="'/update/'+item.id">Change</router-link>
                                <a class="btn btn-danger" @click="deleteOnAction($event)" v-bind:id="item.id">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</template>

<style>
    .glyphicon { margin-right:5px; }
    .thumbnail
    {
        margin-bottom: 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item
    {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
    }
    .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
    {
        background: #428bca;
    }

    .item.list-group-item .list-group-image
    {
        margin-right: 10px;
    }
    .item.list-group-item .thumbnail
    {
        margin-bottom: 0px;
    }
    .item.list-group-item .caption
    {
        padding: 9px 9px 0px 9px;
    }
    .item.list-group-item:nth-of-type(odd)
    {
        background: #eeeeee;
    }

    .item.list-group-item:before, .item.list-group-item:after
    {
        display: table;
        content: " ";
    }

    .item.list-group-item img
    {
        float: left;
    }
    .item.list-group-item:after
    {
        clear: both;
    }
    .list-group-item-text
    {
        margin: 0 0 11px;
    }

    .list-group {
        display: block !important;
    }
    .row {
        display: block !important;
    }

</style>

<script>
    export default {
        data() {
            return {
                items:[]
            }
        },
        created() {
            this.$http.get("/api/getItem")
                .then(function (response) {
                    this.items = response.body.data;
                    console.log(response);
                });
        },
        methods:{
            deleteOnAction(event) {

                let message = confirm("Are you sure do you want to delete this item?");
                if (message === true) {
                    this.$http.delete("/api/deleteItem/"+event.target.id)
                        .then(function (response) {
                            this.$http.get("/api/getItem")
                                .then(function (response) {
                                    this.items = response.body.data;
                                    console.log(response);
                                });
                        });
                }
            }
        }
    }
</script>
