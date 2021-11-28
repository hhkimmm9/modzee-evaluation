<template>
    <div id="ProfileShow" v-show="loading">
        <router-link to="/profile" id="button">Go Back</router-link>
        <div id="profileSection">
            <div id="img">
                <img
                    :src="`http://localhost/storage/${getProfile.profile_picture}`"
                    alt="Profile Picture"
                />
            </div>
            <div id="nameAndPersonalInfo">
                <div id="upper">
                    <h2>{{ getProfile.name }}</h2>
                </div>
                <div id="lower">
                    <div id="left">
                        <h5 id="bio-title">Bio</h5>
                        <p id="bio">{{ getProfile.bio }}</p>
                    </div>
                    <div id="right">
                        <h5 id="phone-title">Phone</h5>
                        <p id="phone">
                            {{ getProfile.phone }}
                        </p>
                        <h5 id="email-title">Email</h5>
                        <p id="email">
                            {{ getProfile.email }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="albumSection">
            <AlbumCard
                v-for="album in getAlbum"
                :album="album"
                :key="album.id"
            />
        </div>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

import AlbumCard from "./AlbumCard.vue";

export default {
    name: "ProfileShow",

    components: {
        AlbumCard,
    },

    data() {
        return {
            loading: true,
        };
    },

    methods: {
        ...mapActions(["fetchProfileShow", "fetchAlbumIndex"]),
    },

    async mounted() {
        await this.fetchProfileShow(this.$route.params.id);
        await this.fetchAlbumIndex(this.getProfile.id);
        this.loading = true;
    },

    computed: mapGetters(["getProfile", "getAlbum"]),
};
</script>

<style scoped>
#button {
    margin: 1em;
    border: 1.5px solid rgb(250, 250, 250);
    text-decoration: none;
    color: white;
    padding: 0.5em;
    display: inline-block;
    width: 10%;
}

#profileSection {
    background: white;
    width: 80vw;
    margin: 1em auto;
    display: flex;
    min-width: 768px;
}
