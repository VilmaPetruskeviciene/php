import { useState } from 'react';
import '../../sass/square.scss';
import axios from 'axios';

function RedSquare ({size, ziggy}) {

    const [text, setText] = useState('');
    const [color, setColor] = useState('#ffffff');
    const [squares, setSquares] = useState([]);

    const add = () => {
        //axios.post(ziggy.url + '/add-square', {text, color})
        //.then(res => {
            //console.log(res);
        //});
        setSquares(s => [...s, {text, color}]);
        setText('');
        setColor('#ffffff');
    }

    return (
        <>
        <div className='square-bin'>
            {
                squares.map((s, i) => <div key={i} className="square" style={{
                    width: size + 'px',
                    height: size + 'px',
                    backgroundColor: s.color + '70',
                }}>{s.text}</div>)
            }
        </div>
        <div className='input-bin'>
            <button onClick={add}>Add</button>
            <input type="text" value={text} onChange={e => setText(e.target.value)}></input>
            <input type="color" value={color} onChange={e => setColor(e.target.value)}></input>
        </div>
        </>
    );
}

export default RedSquare;