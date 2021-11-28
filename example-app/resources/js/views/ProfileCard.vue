<template>
    <router-link :to="`profile/${profile.id}`" id="linkToProfile">
        <div id="profileCard">
            <img
                :src="`http://localhost/storage/${profile.profile_picture}`"
                alt="Profile Image"
            />
            <h3>
                {{ this.profile.name }}
            </h3>
        </div>
    </router-link>
</template>

<script>
export default {
    name: "ProfileCard",

    props: {
        profile: Object,
    },
};
</script>

<style scoped>
#profileCard {
    margin: 2em;
    padding: 1em;
    background: white;
    border-radius: 10px;
    width: 200px;
}

#linkToProfile {
    text-decoration: none;
}

img {
    width: 100px;
    margin: 15px;
}

h3 {
    color: darkgrey;
}
</style>
