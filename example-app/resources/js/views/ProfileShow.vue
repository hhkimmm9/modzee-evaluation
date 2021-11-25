<template>
    <div id="ProfileShow">
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
            <div
                id="albumCard"
                v-for="album in getProfile.album"
                :key="album.id"
            >
                <AlbumCard :album="album" />
            </div>
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

    mounted() {
        this.fetchProfile();

        this.imgPath = this.getProfile.profile_picture;
    },

    methods: {
        ...mapActions(["fetchProfile"]),
    },

    computed: mapGetters(["getProfile"]),
};
</script>

<style scoped>
#profileSection {
    background: white;
    width: 80vw;
    margin: auto;
    display: flex;
}

#img {
    width: 25%;
    margin: auto;
}

img {
    width: 75%;
    border-radius: 50%;
}

#nameAndPersonalInfo {
    width: 75%;
    text-align: left;
    padding: 15px;
}

#lower {
    display: flex;
    color: darkgrey;
}

#left {
    width: 65%;
    padding-right: 20px;
}

#bio-title {
    margin-bottom: 0;
}

#bio {
    margin-top: 0;
    color: lightgray;
}

#right {
    width: 35%;
}

#phone-title {
    margin-bottom: 0;
}

#phone {
    color: hotpink;
    margin-top: 5px;
    margin-bottom: 0;
}

#email-title {
    margin-bottom: 0;
    margin-top: 5px;
}

#email {
    color: hotpink;
    margin-top: 5px;
}

#albumSection {
    width: 80vw;
    margin-right: 0;
}
</style>
