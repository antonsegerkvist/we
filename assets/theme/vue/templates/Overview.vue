<template>
  <div class="overview-template">

    <!-- Header. -->
    <div class="header">
    </div>

    <!-- SubHeader. -->
    <div class="sub-header">
    </div>

    <!-- Body. -->
    <div class="body">

      <!-- Left. -->
      <div class="left">

        <!-- Container. -->
        <div class="container">

        </div>

      </div>

      <!-- Right. -->
      <div class="right">

        <!-- Container. -->
        <div class="container">

          <!-- New discussion button. -->
          <we-button-component
            label="NEW DISCUSSION"/>

          <!-- Discussion display. -->
          <we-discussion-display-component/>

          <!-- Category display. -->
          <we-category-display-component/>

        </div>

      </div>

    </div>

    <!-- Footer. -->
    <div class="footer">
    </div>

  </div>
</template>

<script>
</script>

<style lang="scss" >
/* Component container. */
.overview-template {

  /* Header. */
  & > .header {
    background-color: rgb(11, 105, 208);
    height: 20px;
    width: 100%;
  }

  /* Header. */
  & > .sub-header {
    background-color: rgb(16, 137, 245);
    height: 60px;
    width: 100%;
  }

  /* Content. */
  & > .body {
    background-color: rgb(235, 235, 235);
    box-sizing: border-box;
    display: inline-block;
    padding: 25px 30px;
    vertical-align: top;
    width: 100%;

    /* Left column. */
    & > .left {
      box-sizing: border-box;
      display: inline-block;

      /* Container. */
      & > .container {
        background-color: #fff;
        padding: 10px;
      }

    }

    /* Right column. */
    & > .right {
      box-sizing: border-box;
      display: inline-block;

      /* Container. */
      & > .container {
        padding: 0;
      }

    }

    /* Desktop mode. */
    @media (min-width: 800px) {

      /* Left column. */
      & > .left {
        float: left;
        padding: 0 15px;
        width: 70%;
      }

      /* Right column. */
      & > .right {
        float: left;
        padding: 0 15px;
        width: 30%;
      }

    }

    /* Mobile mode. */
    @media (max-width: 799px) {

      /* Left column. */
      & > .left {
        width: 100%;
      }

      /* Right column. */
      & > .right {
        width: 100%;
      }

    }

  }

  & > .footer {
    background-color: #333;
    height: 40px;
    width: 100%;
  }

}
</style>
