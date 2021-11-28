import axios from "axios";

const state = {
    album: null,
};

const getters = {
    getAlbum: (state) => state.album,
};

const actions = {
    // Fetch album data that linked to a specific user account.
    async fetchAlbumIndex({ commit }, id) {
        await axios
            .get(`http://localhost/api/album?whose=${id}`)
            .then((res) => {
                commit("setAlbum", res.data);
            })
            .catch((err) => alert(err));
    },

    clearAlbum({ commit }) {
        commit("clearAlbum");
    },
};

const mutations = {
    setAlbum: (state, albumData) => (state.album = albumData),
    clearAlbum: (state) => (state.album = null),
};

export default { state, getters, actions, mutations };
