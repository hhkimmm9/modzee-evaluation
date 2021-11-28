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
                <h2>{{ getProfile.name }}</h2>
                <div id="lower">
                    <div id="left">
                        <h5 class="bottomZero">Bio</h5>
                        <p id="bioContent">{{ getProfile.bio }}</p>
                    </div>
                    <div id="right">
                        <h5 class="bottomZero">Phone</h5>
                        <p class="bottomZero fontColorPink">
                            {{ getProfile.phone }}
                        </p>
                        <h5 class="bottomZero">Email</h5>
                        <p class="bottomZero fontColorPink">
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

#img {
    flex: 1;
    margin: auto;
}

#img > img {
    width: 75%;
    border-radius: 50%;
}

#nameAndPersonalInfo {
    flex: 3;
    text-align: left;
    padding: 15px;
}

#lower {
    display: flex;
    color: darkgrey;
}

#bioContent {
    margin-top: 0.5em;
    margin-right: 0.5em;
    color: lightgray;
}

.bottomZero {
    margin: 0.3em 0;
}

.fontColorPink {
    color: hotpink;
}

#albumSection {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 25px;
}

@media (max-width: 800px) {
    #profileSection {
        background: white;
        width: 50%;
        margin: 1em auto;
        display: flex;
        flex-direction: column;
        min-width: 200px;
    }

    #img {
        margin: 15px auto;
    }

    #img > img {
        width: 50%;
        border-radius: 50%;
    }

    #nameAndPersonalInfo {
        text-align: center;
        padding: 1.5em;
    }

    #lower {
        display: flex;
        flex-direction: column;
        color: darkgrey;
    }

    #left {
    }

    #right {
    }

    #bioContent {
        margin: 0.5em auto;
        color: lightgray;
        text-align: justify;
    }
}
</style>
