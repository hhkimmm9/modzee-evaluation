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
                    alt="Heart Icon Featured True"
                />
                <img
                    v-show="!album.featured"
                    src="https://www.pngall.com/wp-content/uploads/2016/03/Heart-PNG-HD.png"
                    alt="Heart Icon Featured False"
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
    width: 80vw;
    height: auto;
    margin: 10px;
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
    font-size: 40px;
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
    display: flex;
    align-items: center;
    justify-content: space-between;
}

#lower > img {
    width: 1.5em;
    margin-left: 1em;
}

#lower > p {
    color: lightgrey;
    text-align: right;
    right: 5px;
    bottom: 3px;
    margin: 0;
    padding: 10px;
}

@media (min-width: 944px) {
    #AlbumCard {
        width: 30vw;
        height: auto;
        margin: 10px;
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
}
</style>
