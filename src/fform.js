// 'use strict';
// import React from "react";
// import  FlatList  from "react-native";


const e = React.createElement;

const taskList = ["test"];

// import { Text, View } from "react-native";

const TaskShown = ({ name }) => (
  <View>
    <Text>{name}</Text>
  </View>
);

const App = ()=> ({
    constructor(props) {
        super.constructor(props);

        this.state = {
            countries: taskList
        }
    },

    render() {
        return (
            <View style={{ flex: 1 }}>
                <FlatList
                    taskList={this.state.taskList}
                    renderItem={({item}) => <TaskShown name={item} />}
                />
            </View>
        );
    }
})
// export default App;
