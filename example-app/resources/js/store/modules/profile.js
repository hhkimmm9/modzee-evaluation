import axios from "axios";

const state = {
    profileList: [],
    profile: {},
};

const getters = {
    getProfileList: (state) => state.profileList,
    getProfile: (state) => state.profile,
};

const actions = {
    async fetchProfileIndex({ commit }) {
        await axios
            .get("http://localhost/api/profile")
            .then((res) => {
                commit("setProfileList", res.data);
            })
            .catch((err) => alert(err));
    },

    async fetchProfileShow({ commit }, id) {
        await axios
            .get(`http://localhost/api/profile/${id}`)
            .then((res) => {
                commit("setProfile", res.data);
            })
            .catch((err) => alert(err));
    },
};

const mutations = {
    setProfileList: (state, profileList) => (state.profileList = profileList),
    setProfile: (state, profile) => (state.profile = profile),
};

export default { state, getters, actions, mutations };
