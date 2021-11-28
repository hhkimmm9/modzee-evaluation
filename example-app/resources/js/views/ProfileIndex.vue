<template>
    <div id="ProfileIndex" v-show="loading">
        <ProfileCard
            v-for="profile in getProfileList"
            :profile="profile"
            :key="profile.id"
        />
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import ProfileCard from "./ProfileCard.vue";

export default {
    name: "ProfileIndex",

    data() {
        return {
            loading: true,
        };
    },

    components: {
        ProfileCard,
    },

    methods: {
        ...mapActions(["fetchProfileIndex", "clearAlbum"]),
    },

    mounted() {
        this.fetchProfileIndex();
        this.clearAlbum();
        this.loading = true;
    },

    computed: mapGetters(["getProfileList"]),
};
</script>

<style scoped>
#ProfileIndex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
</style>
