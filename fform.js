var _get = function get(object, property, receiver) { if (object === null) object = Function.prototype; var desc = Object.getOwnPropertyDescriptor(object, property); if (desc === undefined) { var parent = Object.getPrototypeOf(object); if (parent === null) { return undefined; } else { return get(parent, property, receiver); } } else if ("value" in desc) { return desc.value; } else { var getter = desc.get; if (getter === undefined) { return undefined; } return getter.call(receiver); } };

// 'use strict';
// import React from "react";
// import  FlatList  from "react-native";


var e = React.createElement;

var taskList = ["test"];

// import { Text, View } from "react-native";

var TaskShown = function TaskShown(_ref) {
    var name = _ref.name;
    return React.createElement(
        View,
        null,
        React.createElement(
            Text,
            null,
            name
        )
    );
};

var App = function App() {
    var _obj;

    return _obj = {
        constructor: function constructor(props) {
            _get(_obj.__proto__ || Object.getPrototypeOf(_obj), "constructor", this).call(this, props);

            this.state = {
                countries: taskList
            };
        },
        render: function render() {
            return React.createElement(
                View,
                { style: { flex: 1 } },
                React.createElement(FlatList, {
                    taskList: this.state.taskList,
                    renderItem: function renderItem(_ref2) {
                        var item = _ref2.item;
                        return React.createElement(TaskShown, { name: item });
                    }
                })
            );
        }
    };
};
// export default App;