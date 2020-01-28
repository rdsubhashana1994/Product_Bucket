
<template>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"/>
    </button>
    <router-link class="navbar-brand" to="/">Product Bucket</router-link>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mr-4">
          <router-link to="/">Home</router-link>
        </li>
        <li class="nav-item mr-4">
          <router-link to="addproduct">New Product</router-link>
        </li>
        <li class="nav-item mr-4">
          <router-link to="bucket">My Bucket</router-link>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item mr-4">
            <router-link to="aboutus">About Us</router-link>
          </li>
          <li class="nav-item mr-4">
            <router-link to="contactus">Contact Us</router-link>
          </li>
        </ul>
      </form>
    </div>
  </nav>

</template>

<script>

</script>
