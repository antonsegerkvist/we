<template>
  <div class="we-discussion-display-component">
    <h4>Discussions</h4>
    <ul>
      <li>
        <a href="javascript:void(0)">
          Recent Discussions
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          My Bookmarks
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          Recent Discussions
        </a>
      </li>
      <li>
        <a href="javascript:void(0)">
          My Drafts
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
import {
  mapActions,
  mapGetters
} from 'vuex'

export default {
}
</script>

<style lang="scss">
.we-discussion-display-component {
  box-sizing: border-box;
  margin-top: 20px;
  width: 100%;

  & > h4 {
    color: #444;
    font-family: "ProximaNovaRegular";
    font-size: 18px;
    margin-bottom: 10px;
  }

  & > ul {
    background-color: #fff;
    padding: 5px 15px;

    & > li {
      margin: 20px 0;

      & > a {
        color: #444;
        font-family: helvetica;
        font-size: 16px;
        text-decoration: none;
      }

    }

  }

}
</style>
