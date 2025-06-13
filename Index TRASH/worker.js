export default {
  async fetch(request, env) {
    if (request.method !== "POST") {
      return new Response("Method Not Allowed", { status: 405 });
    }

    const formData = await request.formData();
    const file = formData.get("client-file");
    const firm = formData.get("client-firm");
    const documentType = formData.get("document-type");

    if (!file || !firm || !documentType) {
      return new Response("Missing required fields", { status: 400 });
    }

    // Generate unique storage key
    const fileKey = `${firm}/${documentType}/${file.name}`;

    // Store metadata in KV Storage
    await env.UPLOAD_METADATA.put(fileKey, JSON.stringify({
      firm,
      documentType,
      fileName: file.name,
      uploadDate: new Date().toISOString(),
    }));

    return new Response(`File uploaded successfully for ${firm} - ${documentType}`, { status: 200 });
  }
};