import { useEffect } from "react";
import { useState } from "react";

function Edit({ modalData, setModalData, setEditData }) {

    const [type, setType] = useState('');
    const [weight, setWeight] = useState('');
    const [tail, setTail] = useState(false);

    useEffect(() => {
        if (null === modalData) {
            return;
        }
        setType(modalData.type);
        setWeight(modalData.weight);
        setTail(modalData.tail);
    }, [modalData]);

    const save = () => {
        setEditData({
            type,
            weight,
            tail: tail ? 1 : 0,
            id: modalData.id
        });
        setModalData(null);
    }


    if (modalData === null) {
        return null;
    }

    return (
        <div className="modal">
            <div className="modal-dialog modal-dialog-centered">
                <div className="modal-content">
                    <div className="modal-header">
                        <h5 className="modal-title">Edit Animal</h5>
                        <button type="button" className="close" onClick={() => setModalData(null)}>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div className="modal-body">
                        <div className="container">
                            <div className="row justify-content-center">
                                <div className="col-12">
                                    <div className="card m-4">
                                        <div className="card-body">
                                            <div className="form-group">
                                                <label>Type</label>
                                                <input type="text" className="form-control" value={type} onChange={e => setType(e.target.value)} />
                                                <small className="form-text text-muted">Animal type</small>
                                            </div>
                                            <div className="form-group">
                                                <label>Weight</label>
                                                <input type="text" className="form-control" value={weight} onChange={e => setWeight(e.target.value)} />
                                                <small className="form-text text-muted">Animal weight in kg</small>
                                            </div>
                                            <div className="form-group form-check">
                                                <input type="checkbox" className="form-check-input" value="1" checked={tail} onChange={() => setTail(t => !t)} />
                                                <label className="form-check-label">Has tail?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="modal-footer">
                        <button type="button" className="btn btn-secondary" onClick={() => setModalData(null)}>Close</button>
                        <button type="button" className="btn btn-primary" onClick={save}>Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Edit;