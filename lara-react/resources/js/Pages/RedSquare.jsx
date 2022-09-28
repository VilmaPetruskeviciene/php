import { useEffect, useRef, useState } from 'react';
import '../../sass/square.scss';
import axios from 'axios';

function RedSquare({size, ziggy}) {

    const [text, setText] = useState('');
    const [color, setColor] = useState('#ffffff');
    const [squares, setSquares] = useState([]);

    const refresh = useRef('_1');

    const rand = (min, max) => {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    
    useEffect(() => {
        axios.get(ziggy.url + '/get-squares')
        .then(res => setSquares(res.data.squares));
    }, []);


    const add = () => {
        axios.post(ziggy.url + '/add-square', {text, color})
        .then(res => {
            console.log(res)
        });
        refresh.current = '_' + rand(0, 10);
        setSquares(s => [...s, {text, color}]);
        setText('');
        setColor('#ffffff');
    }

    const reset = () => {
        axios.delete(ziggy.url + '/reset-squares');
        setSquares([]);
        setText('');
        setColor('#ffffff');
    }

    return (
        <>
            <div className="square-bin">
                {
                    squares.map((s, i) => <div key={i + refresh.current} className="square" style={{
                        width: size + 'px',
                        height: size + 'px',
                        backgroundColor: s.color + '70',
                    }}>{s.text}</div>)
                }
                
            </div>
            <div className="input-bin">
                <button onClick={add}>Add</button>
                <input type="text" value={text} onChange={e => setText(e.target.value)}></input>
                <input type="color" value={color} onChange={e => setColor(e.target.value)}></input>
                <button onClick={reset}>Reset</button>
            </div>
        </>
    );
}

export default RedSquare;