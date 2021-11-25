<template>
    <div id="AlbumCard">
        <div id="imgAndTitle">
            <img
                :src="`http://localhost/storage/${album.img}`"
                alt="Album Image"
            />
            <p>{{ album.title }}</p>
        </div>
        <div id="descAndDate">
            <div id="upper">
                {{ album.description }}
            </div>
            <div id="lower">
                <img
                    v-if="album.featured"
                    src="http://localhost/storage/img/160px-Heart_corazón.png"
                    alt="Heart Icon"
                />
                <p>{{ album.date }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AlbumCard",

    props: {
        album: Object,
    },
};
</script>

<style>
#AlbumCard {
    display: flex;
    flex-direction: column;
    width: 25%;
}

#imgAndTitle {
    position: relative;
    width: 100%;
    height: 60%;
}

#imgAndTitle > p {
    position: absolute;
    top: 85%;
    left: 5%;
    color: white;
    font-weight: bold;
    font-size: 25px;
    margin: 0;
}

#descAndDate {
    background: white;
    width: 100%;
    height: 40%;
}

#lower {
    display: flex;
}

#lower > img {
    width: 20px;
}
</style>
