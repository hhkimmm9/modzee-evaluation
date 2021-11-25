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
                    v-show="album.featured"
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

<style scoped>
#AlbumCard {
    display: flex;
    flex-direction: column;
    width: 30vw;
}

#imgAndTitle {
    position: relative;
}

#imgAndTitle > img {
    width: 100%;
}

#imgAndTitle > p {
    position: absolute;
    top: 80%;
    left: 3%;
    color: white;
    font-weight: bold;
    font-size: 23px;
    margin: 0;
}

#descAndDate {
    background: white;
}

#upper {
    padding: 15px;
    text-align: justify;
}

#lower {
    position: relative;
}

#lower > img {
    position: absolute;
    width: 20px;
    left: 5px;
    bottom: 3px;
}

#lower > p {
    color: lightgrey;
    text-align: right;
    right: 5px;
    bottom: 3px;
    margin: 0;
    padding: 10px;
}
</style>
