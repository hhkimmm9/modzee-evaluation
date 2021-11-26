import axios from "axios";

const state = {
    profile: null,
};

const getters = {
    getProfile: (state) => state.profile,
};

const actions = {
    async fetchProfile({ commit }) {
        await axios
            .get("http://localhost/api/profile")
            .then((res) => {
                console.log("Successfully loaded data...");
                commit("setProfile", res.data);
            })
            .catch((err) => alert(err));
    },
};

const mutations = {
    setProfile: (state, profileData) => (state.profile = profileData),
};

export default { state, getters, actions, mutations };
