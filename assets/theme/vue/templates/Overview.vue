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
      <div class="popular">
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
    height: 100px;
    padding: 25px 30px;
    width: 100%;

    /* Left column. */
    & > .left {

    }

    /* Right column. */
    & > .right {

    }

  }

  & > .footer {
    background-color: #333;
    height: 40px;
    width: 100%;
  }

}
</style>
