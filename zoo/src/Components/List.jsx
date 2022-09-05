function List({list, setDeleteData, setModalData}) {

    const destroy = id => {
        setDeleteData({id});
    }

    const edit = a => {
        setModalData(a);
    }



    if (null === list) {
        return <h2>Loading...</h2>
    }

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-12">
                    <div className="card m-4">
                        <div className="card-header">
                            <h2>Animals List</h2>
                        </div>
                        <div className="card-body">
                            <ul className="list-group">
                                {
                                    list.map(a => (
                                        <li className="list-group-item" key={a.id}>
                                            <div className="line">
                                                <div className="line__content">
                                                    <div className="line__content__type">
                                                        {a.type}
                                                    </div>
                                                    <div className="line__content__weight">
                                                        {a.weight} kg
                                                    </div>
                                                    {
                                                        a.tail ? <div className="line__content__tail"></div> : null
                                                    }
                                                </div>
                                                <div className="line__buttons">
                                                    <button type="button" className="btn btn-outline-success m-2" onClick={() => edit(a)}>Edit</button>
                                                    <button type="submit" className="btn btn-outline-danger m-2" onClick={() => destroy(a.id)}>Delete</button>
                                                </div>
                                            </div>
                                        </li>
                                    )
                                    )}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}




export default List;