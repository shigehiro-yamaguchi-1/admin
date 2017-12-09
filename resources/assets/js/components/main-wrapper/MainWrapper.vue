<template>
<!--
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <router-link :to="{name: 'profile'}" class="list-group-item" activeClass="active" exact>View Profile</router-link>
                    <router-link :to="{name: 'profile.editProfile'}" class="list-group-item" activeClass="active" exact>Edit Profile</router-link>
                    <router-link :to="{name: 'profile.editPassword'}" class="list-group-item" activeClass="active" exact>Edit Password</router-link>
                </div>
            </div>
            <div class="col-md-9">
                <transition name="fade" mode="out-in">
                    <router-view></router-view>
                </transition>
            </div>
        </div>
    </div>
-->

    <el-row class="tac">
        <el-col :span="12">
            <h5>Default colors</h5>
            <el-menu
                    default-active="2"
                    class="el-menu-vertical-demo"
                    @open="handleOpen"
                    @close="handleClose">
                <el-submenu index="1">
                    <template slot="title">
                        <i class="el-icon-location"></i>
                        <span>Navigator One</span>
                    </template>
                    <el-menu-item-group title="Group One">
                        <el-menu-item index="1-1">item one</el-menu-item>
                        <el-menu-item index="1-2">item one</el-menu-item>
                    </el-menu-item-group>
                    <el-menu-item-group title="Group Two">
                        <el-menu-item index="1-3">item three</el-menu-item>
                    </el-menu-item-group>
                    <el-submenu index="1-4">
                        <template slot="title">item four</template>
                        <el-menu-item index="1-4-1">item one</el-menu-item>
                    </el-submenu>
                </el-submenu>
                <el-menu-item index="2">
                    <i class="el-icon-menu"></i>
                    <span>Navigator Two</span>
                </el-menu-item>
                <el-menu-item index="3">
                    <i class="el-icon-setting"></i>
                    <span>Navigator Three</span>
                </el-menu-item>
            </el-menu>
        </el-col>
    </el-row>


</template>

<script>
    // import ElContainer from "element-ui/packages/container/src/main";
    export default{
        name: 'main-wrapper',
        // components: {
        //     ElContainer,
        // },
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
</script>
