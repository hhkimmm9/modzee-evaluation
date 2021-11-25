<template>
    <div id="app">
        <div id="no-footer">
            <div id="nav">
                <router-link to="/" class="router-link">Home</router-link>
                |
                <router-link to="/profile" class="router-link"
                    >Photographers
                </router-link>
            </div>
            <hr />
            <div id="content">
                <router-view />
            </div>
        </div>
        <hr />
        <div id="footer">
            <p>Built by Harrison Kim</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "App",
};
</script>

<style>
#app {
    background-image: url("https://www.xmple.com/wallpaper/brown-blue-linear-gradient-3200x1800-c2-a0522d-87ceeb-a-45-f-14.svg");
    font-family: sans-serif;
}

#nav {
    text-align: center;
    padding: 20px;
    color: rgb(250, 250, 250);
    font-weight: bold;
}

.router-link {
    text-decoration: none;
    color: inherit;
    font-size: 25px;
    margin: 0 10px;
}

#content {
    text-align: center;
    display: flex;
    flex-direction: column;
    padding: 10px;
}

#no-footer {
    min-height: calc(100vh - 95px);
}

#footer {
    text-align: center;
    color: rgb(250, 250, 250);
    height: 50px;
}
</style>
