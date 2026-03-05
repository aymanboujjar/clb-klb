import React from 'react';

/**
 * Rich text editor using Quill. Use for blog body (and optionally description) in admin.
 * Requires: npm install react-quill --legacy-peer-deps (React 19 peer fix)
 */
let ReactQuill = null;
try {
    // eslint-disable-next-line global-require
    ReactQuill = require('react-quill').default;
    require('react-quill/dist/quill.snow.css');
} catch {
    ReactQuill = null;
}

const QUILL_MODULES = {
    toolbar: [
        [{ header: [1, 2, 3, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ list: 'ordered' }, { list: 'bullet' }],
        ['link', 'image'],
        ['clean'],
    ],
};

export default function QuillEditor({ value = '', onChange, placeholder, className, ...rest }) {
    if (!ReactQuill) {
        return (
            <div className={`rounded border border-input bg-muted p-4 ${className || ''}`}>
                <p className="text-muted-foreground text-sm">
                    Install react-quill: <code>npm install react-quill --legacy-peer-deps</code>
                </p>
                <textarea
                    className="mt-2 w-full min-h-[200px] rounded border border-border p-2 text-sm"
                    value={value}
                    onChange={(e) => onChange(e.target.value)}
                    placeholder={placeholder}
                    {...rest}
                />
            </div>
        );
    }

    return (
        <ReactQuill
            theme="snow"
            value={value}
            onChange={onChange}
            modules={QUILL_MODULES}
            placeholder={placeholder}
            className={className}
            {...rest}
        />
    );
}
